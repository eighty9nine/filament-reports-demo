<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocsController extends Controller
{
    public function __invoke($path = "")
    {
        // check if path is a directory then append index.html
        if (is_dir(resource_path('docs/build/') . $path)) {
            $path = $path . "/index.html";
        }
        $fullPath = resource_path('docs/build/') . $path;
        $contents = app(\Illuminate\Filesystem\Filesystem::class)->get($fullPath);

        // check if the file ends with css and return the css header
        if (str($path)->endsWith('.css')) {
            return response($contents, 200, [
                'Content-Type' => 'text/css'
            ]);
        }
        // check if the file ends with js and return the js header
        if (str($path)->endsWith('.js')) {
            return response($contents, 200, [
                'Content-Type' => 'application/javascript'
            ]);
        }

        // if path has index.html append a script before the end of the body
        if (str($path)->endsWith('index.html')) {
            $script = "<script>
            document.addEventListener('DOMContentLoaded', function() {
                document.querySelectorAll('a.navbar__brand').forEach(function(el) {
                    el.addEventListener('click', function(e) {
                        e.preventDefault();
                        window.location = '/';
                    });
                });
            });
        </script>";
            $contents = str_replace('</body>', $script . '</body>', $contents);
        }
        return $contents;
    }
}
