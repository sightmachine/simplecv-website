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
```
$ cd _site
```

You can serve it with ```SimpleHTTPServer```
```
$ python -m SimpleHTTPServer
```
