Reduce size of video using ffmpeg
===

ffmpeg -n -loglevel error -i DJI_0298.MP4 -vcodec libx264 -crf 28 -preset faster -tune film result.mp4

Useful crf values vary between 18 and 28, with the default value being 23.

e.g.
----------
| redvid |
----------
#!/bin/bash

if [ "$#" -ne 3 ]; then

    echo "Usage of redvid"
    
    echo "==============="
    
    echo "redvid input_file output_file compression_level"
    
    echo "compression_level is a number between 18 and 28; lower value means better quality; default value is 23"
    
    echo "---------------"
    
    echo "e.g. redvid raw_2301.mp4 result.mp4 28"

else

    ffmpeg -n -loglevel error -i $1 -vcodec libx264 -crf $3 -preset faster -tune film $2	

fi
