Use jpegoptim
=============

Note that folder *result* must exist and I am redirecting output to a text file, to be able to read results. --max=90 indicates quality conversion (90% here).

<code>jpegoptim --max=90 --dest=result *.jpg --strip-all > result.txt</code>

Rip audio CD in debian
======================

<code>pacpl --rip <tracks> --to <format></code>
`<tracks>` can be `all`, or track numbers separated by commas, e.g. `1,2,4`
`<format>` can be `mp3`, `mp4`, `flac`,...
