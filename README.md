# Bare Naked theme
This is a bare naked WordPress starter theme. It uses SMACSS, BEM, Gulp, and Advanced Custom Fields Pro as a starting point.


## Getting started
- Install Bare Naked in WordPress
- `cd` to the theme directory in terminal and run `npm install`
- Edit the variables at the top of gulpfile.js to point to your local wordpress install url `yoursite.dev`
- Run `gulp` in the theme directory to start Gulp with autoprefixer, scss, and browserSync
- A new page will open in your default browser at `localhost:3000`. This page will automatically refresh every time you edit a file. Changes to scss will be compiled to css and injected without a page refresh.


## Grid system
We're using susy 3 while transitioning to using the CSS Grid module. Writing responsive classes into html is highly discouraged. The grid styles should be added into each module's .scss file.
- http://oddbird.net/susy/docs/
- https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Grid_Layout
- http://ruby.bvision.com/blog/please-stop-embedding-bootstrap-classes-in-your-html


## CSS naming convention and architecture
We're using BEM to keep the relationship between module parts apparent and easy to understand. SMACSS is used to organize our styles in modules. It's a good idea to keep the file names and element names the same. ex `menu.php` `_menu.scss` `.menu` `.menu__item`
- http://getbem.com/
- https://smacss.com/

## Typography
To unlink styles from markup, heading elements should be styled by class only. Instead of styling `h1 {}`, style `.h1 {}`, etc.

To eliminate render blocking font loading and keep FOUT to a minimum, we base64 encode fonts and serve them via defered JS using localfont.
- https://github.com/jaicab/localFont
- https://jaicab.com/localFont/

To use google fonts as base64 we self host them using the google fonts web helper
- https://google-webfonts-helper.herokuapp.com/fonts

Font sizes should be in rem's and em's. The main font size should be 100% to allow users to change their font size. Components of modules should use em units so that the module can scale the font size of its contents using rem. A sass rem utility is included to make translating px to rems from sketch files and psd's easier
- https://github.com/pierreburel/sass-rem

## Asset queue management
Include all js files separately (in order of dependance) as they will be concatenated and served as a single file by autoptimize. Autoptimize also makes minification unnecessary at the build level.

## General best practises
- Using id's leads to single use code and specificity wars. Don't do it! use classes only! id's should only be used for href links. Make your code reusable. http://screwlewse.com/2010/07/dont-use-id-selectors-in-css/
- Keep classes on elements down to one and use sass extends instead (use two classes only if necessary).
- Background images are content. They can be added with inline css.
