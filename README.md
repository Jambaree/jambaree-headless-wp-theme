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

##CSS naming convention and architecture
We're using BEM to keep the relationship between module parts apparent and easy to understand. SMACSS is used to organize our styles in modules. If writing modules as php includes, it's a good idea to keep the file names and element names the same. ex `menu.php` `_menu.scss` `.menu` `.menu__item`
- http://getbem.com/
- https://smacss.com/
