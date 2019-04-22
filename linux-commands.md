Use jpegoptim
=============

Note that folder *result* must exist and I am redirecting output to a text file, to be able to read results. --max=90 indicates quality conversion (90% here).

<code>jpegoptim --max=90 --dest=result *.jpg --strip-all > result.txt</code>

Rip audio CD in debian
======================

`pacpl --rip <tracks> --to <format>`
  
`<tracks>` can be `all`, or track numbers separated by commas, e.g. `1,2,4`

`<format>` can be `mp3`, `mp4`, `flac`,...

Default apache2 to index.php
============================

Edit file `/etc/apache2/apache2.conf` (could also be `/etc/apache2/httpd.conf`) and add line `DirectoryIndex index.php` to the corresponding `<Directory /mywebsite>` section.
