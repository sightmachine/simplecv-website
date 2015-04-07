#
# SimpleCV Website Build Dockerfile
#
# To build:
# sudo docker build -t="simplecv-website" .
#
# Pull base image.
FROM ubuntu:14.04

RUN apt-get update
RUN apt-get install -y ruby-full nodejs make
RUN gem install jekyll

# Define mountable directories.
VOLUME ["/root/simplecv-website"]
EXPOSE 4000

# Define working directory.
WORKDIR /root/simplecv-website
RUN jekyll build
# WORKDIR /root/simplecv-website/_site
# CMD ["jekyll serve"]