module.exports = function(grunt) {
  grunt.initConfig({
  sass: {
    dist: {
      files: {
        "src/css/senorcoders.css" : "src/scss/style.scss"
      }
    }
  },
  uglify: {
    my_target: {
      options: {
        beautify: false
      },
      files: {
        './js/senorcoders.min.js': ['src/js/**/*.js']
      }
    }
  },
  watch: {        
    css: {
      files: 'src/scss/**/*.scss',
      tasks: ['sass','cssmin'],
    },
    js: {
      files: 'src/js/**/*.js',
      tasks: ['uglify'],
    }
  },
  cssmin: {
    options: {
      mergeIntoShorthands: false,
      roundingPrecision: -1
    },
    target: {
      files: {
        'senorcoders.min.css': ['src/css/senorcoders.css']
      }
    }
  },
  browserSync: {
      dev: {
        bsFiles: {
          src: [
            'src/css/*.css',
            'src/js/*.js',
            '*/*.php'
          ]
        },
    options: {
          watchTask: true,
          server: './../../'
        }
      }
    }
  });
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-browser-sync');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-cssmin');

    grunt.registerTask('default', [
      'watch'
    ]);
  };
