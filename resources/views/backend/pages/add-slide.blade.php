@extends('backend.layouts.main-section')
@section('main-content')
    <!-- main-content-wrap -->
    <div class="main-content-wrap">
        <x-form-header backUrl="sliders.list" :breadcrums=$breadcrums/>
        <!-- new-category -->
        <div class="wg-box">
            <form action="{{route('sliders.store')}}" class="form-new-product form-style-1" method="POST" enctype="multipart/form-data">
                @csrf
                <fieldset class="name">
                    <div class="body-title">Tagline <span class="tf-color-1">*</span></div>
                    <input class="flex-grow" type="text" placeholder="Title" name="tagline" tabindex="0" value=""
                        aria-required="true" required="">
                </fieldset>
                <fieldset class="name">
                    <div class="body-title">Title <span class="tf-color-1">*</span></div>
                    <input class="flex-grow" type="text" placeholder="Line 1" name="title" tabindex="0"
                        value="" aria-required="true" required="">
                </fieldset>
                <fieldset class="name">
                    <div class="body-title">Sub-title<span class="tf-color-1">*</span></div>
                    <input class="flex-grow" type="text" placeholder="Line 2" name="subtitle" tabindex="0"
                        value="" aria-required="true" required="">
                </fieldset>
                <fieldset class="name">
                    <div class="body-title">link<span class="tf-color-1">*</span></div>
                    <input class="flex-grow" type="text" placeholder="Line 2" name="link" tabindex="0"
                        value="" aria-required="true" required="">
                </fieldset>
                <fieldset>
                    <div class="body-title">Upload image <span class="tf-color-1">*</span>
                    </div>
                    <div class="upload-image flex-grow">
                        <div class="item up-load">
                            <label class="uploadfile" for="myFile">
                                <span class="icon">
                                    <i class="icon-upload-cloud"></i>
                                </span>
                                <span class="body-text">Drop your images here or select <span class="tf-color">click to
                                        browse</span></span>
                                <span class="body-text">Accpets png, jpg and gif</span>
                                <input type="file" id="myFile" name="file" accept="image/png, image/gif, image/jpeg">
                            </label>
                        </div>
                    </div>
                </fieldset>
                <div class="bot">
                    <div></div>
                    <button class="tf-button w208" type="submit">Save</button>
                </div>
            </form>
        </div>
        <!-- /new-category -->
    </div>
    <!-- /main-content-wrap -->
@endsection
