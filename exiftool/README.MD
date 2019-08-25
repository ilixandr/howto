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

Add copyright information to image metadata
===
- Add standard copyright information to a file in current directory:
<code>exiftool -rights="Copyright" -CopyrightNotice="Copyright" "filename.extension"</code>
- Add standard copyright information to all files in current directory:
<code>exiftool -rights="Copyright" -CopyrightNotice="Copyright" .</code>

ExifTool creates a copy of the original file, appending <code>_original</code> to the file name, as a backup. To avoid that and modify files directly, use the <code>-overwrite_original</code> option. 

In Europe you use: Copyright {Year} {Copyright owner}, all rights reserved. See http://www.photometadata.org/meta-resources-field-guide-to-metadata#Copyright%20Notice

- An example would be:
<code>exiftool -rights="Copyright 2019 Comunitatea, all rights reserved" -CopyrightNotice="Copyright 2019 Comunitatea, all rights reserved" "filename.extension"</code>

Add Creator / Author to image metadata
===
- Add Creator to a file in current directory:
<code>exiftool -XMP-dc:Creator="Creator" "filename.extension"</code>
- Add Creator to all files in current directory:
<code>exiftool -XMP-dc:Creator="Creator" .</code>

Edit Creative Commons rights information
===
- Add Rights and usageterms to a file in current directory:
<code>exiftool -XMP-dc:Rights="This work is licensed to the public under the Creative Commons Attribution-ShareAlike license http://creativecommons.org/licenses/by-sa/4.0/" -xmp:usageterms="This work is licensed to the public under the Creative Commons Attribution-ShareAlike license http://creativecommons.org/licenses/by-sa/4.0/" "filename.extension"</code>
- Add Rights and usageterms to all files in current directory:
<code>exiftool -XMP-dc:Rights="This work is licensed to the public under the Creative Commons Attribution-ShareAlike license http://creativecommons.org/licenses/by-sa/4.0/" -xmp:usageterms="This work is licensed to the public under the Creative Commons Attribution-ShareAlike license http://creativecommons.org/licenses/by-sa/4.0/" .</code>

Using the Creative Commons schema
===
- Add creative commons to a file in current directory:
<code>exiftool -XMP-cc:license="http://creativecommons.org/licenses/by-sa/4.0/" -XMP-cc:AttributionName="Creator" -XMP-cc:AttributionURL="http://creatorURL.com" "filename.extension"</code>
- Add creative commons to all files in current directory:
<code>exiftool -XMP-cc:license="http://creativecommons.org/licenses/by-sa/4.0/" -XMP-cc:AttributionName="Creator" -XMP-cc:AttributionURL="http://creatorURL.com" .</code>

We will be using license BY-NC-ND, available at https://creativecommons.org/licenses/by-nc-nd/4.0/

CONCLUSION
===
I a single command, this is what we can do to alter our pictures' exif data:

<code>exiftool -XMP-dc:Creator="Comunitatea Valcelele Bobalna" -rights="Copyright 2019 Comunitatea Valcelele Bobalna, all rights reserved" -CopyrightNotice="Copyright 2019 Comunitatea Valcelele Bobalna, all rights reserved" -XMP-cc:license="http://creativecommons.org/licenses/by-nc-nd/4.0/" -XMP-cc:AttributionName="Comunitatea Valcelele Bobalna" -XMP-cc:AttributionURL="http://valcelele.bobalna.ro" "filename.extension"</code>
