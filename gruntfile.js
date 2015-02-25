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
    },
    notify_hooks: {
    options: {
      enabled: true,
      title: "Appsterdam Milan WP", 
      success: true, 
      duration: 3 
    }
  }
  });

  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-notify');

  grunt.registerTask('default', ['watch:all']);
  grunt.registerTask('compile', ['less']);

  grunt.task.run('notify_hooks');
};