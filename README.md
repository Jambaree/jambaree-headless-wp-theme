# Bare Naked theme

This is a bare naked WordPress starter theme. It uses SMACSS, BEM, Gulp, and Advanced Custom Fields Pro as a starting point.

## Getting started

- Install Bare Naked in WordPress
- `cd` to the theme directory in terminal and run `npm install`
- Edit the variables at the top of gulpfile.js to point to your local wordpress install url `yoursite.dev`
- Run `gulp` in the theme directory to start Gulp with autoprefixer, scss, and browserSync
- A new page will open in your default browser at `localhost:3000`. This page will automatically refresh every time you edit a file. Changes to scss will be compiled to css and injected without a page refresh.
