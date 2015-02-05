module.exports = function(grunt) {

  grunt.initConfig({
    less: {
      style:{
        files: {
          "style.css": "less/style.less"
        }
      }
    },
    watch: {
      all:{
        files: ['less/style.less'],
        tasks: ['less:style']
      }
    }
  });

  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-watch');

  grunt.registerTask('default', ['watch:all']);
  grunt.registerTask('compile', ['less']);
};