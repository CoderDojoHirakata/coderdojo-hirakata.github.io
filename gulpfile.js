var gulp = require('gulp');

gulp.task('default', function() {
  // place code for your default task here

  gulp.src("node_modules/bulma/bulma.sass")
  .pipe(gulp.dest("_sass"));
  gulp.src("node_modules/bulma/sass/**")
  .pipe(gulp.dest("_sass/sass"));
});
