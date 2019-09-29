Reduce size of video using ffmpeg
===

ffmpeg -n -loglevel error -i DJI_0298.MP4 -vcodec libx264 -crf 28 -preset faster -tune film result.mp4
