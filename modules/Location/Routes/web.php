<?php

Route::get('/locale/{locale}', function ($locale) {
    request()->session()->put('locale', $locale);
    return redirect('/pages');
});
