<?php

namespace App\Http\Controllers;

use App\Models\Gallery as Project;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\GalleryRequest;
use App\Http\Requests\GalleryEditRequest;
use App\Models\Photo;
use App\Models\Setting;
use App\Models\Menu;
use App\Models\HeaderFooterSetting;
use DB;
use View;
use Illuminate\Support\Facades\Auth;
use App\Models\Language;

class GalleryController extends Controller
{
    //


    public function index(Request $request)
    {
        $langs = Language::all();
        $lang = Language::where('code', $request->language)->first();
        $lang_id = $lang->id;


        $data['projects'] = Project::orderBy('id', 'DESC')->paginate(100);

        $data['lang_id'] = $lang_id;

        return view('gallery.gallery-index', $data, compact('langs'));
    }

    public function create(Request $request)
    {
        $langs = Language::all();
        $lang = Language::where('code', $request->language)->first();
        $lang_id = $lang->id;

        return view('gallery.gallery-create', compact('langs', 'lang_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GalleryRequest $request)
    {


        $input = $request->all();
        $user = Auth::user();


        $user->galleries()->create($input);

        return back()->with('project_success', 'Gallery created successfully!');
    }



    public function edit(Project $gallery, Request $request)
    {

        $project = $gallery;
        $lang = Language::where('code', $request->language)->first();
        $lang_id = $lang->id;

        return view('gallery.gallery-edit', compact('project'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(GalleryEditRequest $request, Project $project)
    {

        $input = $request->all();

        $project->update($input);

        return back()->with('project_success', 'Gallery updated successfully!');
    }

    public function delete_project(Request $request, Project $gallery)
    {


        if (isset($request->delete_all) && !empty($request->checkbox_array)) {
            $projects = Project::findOrFail($request->checkbox_array);
            foreach ($projects as $project) {
                $gallery->delete();
            }
            return back()->with('projects_success', 'Gallery/s deleted successfully!');
        } else {
            return back();
        }

        $projects = Project::findOrFail($request->checkbox_array);
        foreach ($projects as $project) {
            $project->delete();
        }

        return back();
        //return 'works';
    }

    // Show a project by slug
    public function show_slug($slug = 'home')
    {

        if (session()->has('lang')) {
            $currentLang = Language::where('code', session()->get('lang'))->first();
        } else {
            $currentLang = Language::where('is_default', 1)->first();
        }
        $data['currentLang'] = $currentLang;
        $lang_id = $currentLang->id;
        $langs = Language::all();

        $data['headerfooter'] = HeaderFooterSetting::find($lang_id);
        $data['setting'] = Setting::find($lang_id);
        $data['menus'] = Menu::where('language_id', $lang_id)->get();


        $project = Project::whereSlug($slug)->first();

        if (!empty($project)) {
            return View::make('gallery-detail', $data, compact('langs'))->with('project', $project);
            //return $project;
        } else {
            abort(404);
        }
    }
}
