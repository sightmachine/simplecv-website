from SimpleCV import Camera
cam = Camera()

while(1):
     img = cam.getImage()
     img.show()
