import os
import glob
import time
from SimpleCV import Image

# Settings

# Change this to the correct directory path for your images - or 
# remove the '/tmp/cats' value if the images are in the same directory 
# as the script
my_images_path = "/tmp/cats/" 

# Change this to the correct file extension for your images
extension = "*.png"


# Main Program

if not my_images_path:
        path = os.getcwd() 
else:
        path = my_images_path

directory = os.path.join(path, extension)
files = glob.glob(directory)

for file in files:
        new_img = Image(file)
        new_img.show()

	# Wait for 3 seconds before looping to the next image file
        time.sleep(3) 
