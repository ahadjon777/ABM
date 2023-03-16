<!doctype html>
<html lang="en">
<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
    lang="en"
    class="light-style layout-menu-fixed"
    dir="ltr"
    data-theme="theme-default"
    data-assets-path="../assets/"
>
@include('admin.partials.header')
<body>

    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            @include('admin.partials.sidebar')
            <div class="layout-page">
                @include('admin.partials.navbar')
                <div class="content-wrapper">
                    @yield('content')
                    @include('admin.partials.footer')
                    <div class="content-backdrop fade"></div>
                </div>
            </div>
        </div>
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
{{--js footer--}}
@include('admin.partials.js')
{{--end js footer--}}
@yield('js')

</body>
</html>
