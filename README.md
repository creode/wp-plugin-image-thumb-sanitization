If there is a property called "thumb" in the json string stored in a _wp_attachment_metadata row of the wp_postmeta table
(which can be added by a hacker with admin access by manipulating a form within the media section of Wordpress using a browser console),
this string can relate to any file on the server, which will be deleted whenever the image is deleted,
this means that a hacker could delete any file on the whole web server simply by obtaining access to any Wordpress account.

This plugin intercepts any attempt to add this property and replaces is with the path's file name, cutting off access to the rest of the web server.

Please see the following page for more information:
https://blog.ripstech.com/2018/wordpress-file-delete-to-code-execution/