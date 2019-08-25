Install EXIFTOOL in debian-based distros
===
<code>sudo apt install libimage-exiftool-perl</code>

Display metadata information
===
- Display metadata for file filename.extension in current directory:
<code>exiftool "filename.extension"</code>
- Display metadata for all files in current directory:
<code>exiftool .</code>
- To export data into an external file, instead of displaying on the screen:
<code>exiftool "filename.extension" > result.txt"</code>

Remove all metadata
===
- Remove all metadata from a file:
<code>exiftool -all= -overwrite_original "filename.extension"</code>
- Remove all metadata from the current directory:
<code>exiftool -all= -overwrite_original .</code>
- Remove all metadata from all png files in the working directory:
<code>exiftool -all= -overwrite_original -ext png .</code>



