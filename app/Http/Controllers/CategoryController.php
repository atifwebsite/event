<?php
namespace App\Http\Controllers;

use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.category');
    }
    public function comp_vent(Request $request)
    {
        if ($request->search) {
            $categories = Category::where('name', 'LIKE', '%' . $request->search . '%')->paginate(3);

        } else {
            // $categories = Category::paginate(3);
            $categories = Category::whereDate('created_at', '<', Carbon::today())->paginate(3);
        }
        return view('admin.comp_event_list', ['categories' => $categories]);

    }


    public function list(Request $request)
    {
        if ($request->search) {
            $categories = Category::where('name', 'LIKE', '%' . $request->search . '%')->paginate(3);

        } else {
            // $categories = Category::paginate(3);
            $categories = Category::whereDate('created_at', '>=', Carbon::today())->paginate(5);
        }
        return view('admin.category-list', ['categories' => $categories]);

    }

    public function create(Request $request)
    {
        $loggedInUser = Auth::user();

        $input = $request->input();
        $newCategory = new Category();
        $newCategory->name = $input['name'];
        $newCategory->short_desc = $input['short_desc'];
        $newCategory->created_by = $loggedInUser->id;

        if ($request->hasFile('image')) { // Fix field name to match the form
            $image = $request->file('image');
            $ext = $image->getClientOriginalExtension();
            $catefilename = "category_image_" . time() . '.' . $ext;
            $image->move(public_path('category_image'), $catefilename);
            $newCategory->image = $catefilename; // Make sure this matches your DB column name
        }

        $newCategory->save();
        notify()->success('Category created successfully!');
        // Redirect to category list
        return redirect()->route('admin.category-list');
    }




    public function delete($id)
    {
        $category = Category::findOrFail($id);

        // Delete image if it exists
        if ($category->image && File::exists(public_path('category_image/' . $category->image))) {
            File::delete(public_path('category_image/' . $category->image));
        }

        // Delete the category
        $category->delete();
        notify()->success('Category deleted successfully!');
        // Redirect with success message
        return redirect()->route('admin.category-list');
    }




    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.category_edit', ['category' => $category]); // Corrected variable name
    }

    public function update($id, Request $request)
    {
        // Find the category by ID
        $category = Category::findOrFail($id);
        $category->name = $request->input('name');
        $category->short_desc = $request->input('short_desc');
        $category->created_by = $request->input('created_by');
        $category->updated_at = Carbon::now()->format('Y-m-d H:i:s');

        // Check if a new image was uploaded
        if ($request->hasFile('image')) {
            // Delete the old image file if it exists
            if (File::exists(public_path('category_image/' . $category->image))) {
                File::delete(public_path('category_image/' . $category->image));
            }

            // Upload the new image
            $image = $request->file('image');
            $ext = $image->getClientOriginalExtension();
            $catefilename = "category_image_" . time() . '.' . $ext;
            $image->move(public_path('category_image'), $catefilename);
            $category->image = $catefilename; // Update with new image filename
        }

        // Save the updated category
        $category->save();
        notify()->success('Category updated successfully!');

        // Redirect with a success message
        return redirect()->route('admin.category-list');
    }
}
