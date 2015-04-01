# How to generate static files

Install ruby
```
$ sudo apt-get install ruby-full
```

Install Jekyll
```
$ sudo gem install jekyll
```

Generate static files
```
$ jekyll build
```

Now static files can be found at ```_site``` directory
You can serve it with ```SimpleHTTPServer```:
```
$ cd _site
$ python -m SimpleHTTPServer
```
or serve it with Jekyll development server with auto reload:
```
$ jekyll serve
```

# How to add a blog post

Posts are located at ```_posts``` directory. add a new file with name ```YYYY-MM-DD-post-name.markdown``` for example ```2012-07-05-new-website.markdown```. file should contain a header in the following format:

```
---
layout: post
title:  "Title of the post"
date:   2012-07-05 10:00:00
---
content of the post goes here
```

After that you can generate static files and check that a new blog post is added.
