import gulp from 'gulp';
import gulpSass from 'gulp-sass';
import * as sassCompiler from 'sass';

const sass = gulpSass(sassCompiler);

// Compile SCSS to CSS
export function compileSass() {
    // This will target all SCSS files within both the blocks directory and the scss directory
    return gulp.src(['insideoutcreative/blocks/**/*.scss', 'insideoutcreative/scss/**/*.scss'])
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest(file => {
            // If the SCSS file is from the blocks directory, save the compiled CSS there
            if (file.path.includes('blocks')) {
                return 'insideoutcreative/blocks';
            }
            // Otherwise, save it in the css directory
            return 'insideoutcreative/css';
        }));
}

// Watch for changes in SCSS files
export function watchSass() {
    gulp.watch(['insideoutcreative/blocks/**/*.scss', 'insideoutcreative/scss/**/*.scss'], compileSass);
}

// Default tasks
export default gulp.series(compileSass, watchSass);
