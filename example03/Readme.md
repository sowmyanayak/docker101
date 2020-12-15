# Layers & build cache

Layers are generated for each step in the Dockerfile. See the unique generated ID. 
```
cd ../example03 
docker build -t img_myapp03 .
```

Build again, this time using cached layers it will be much faster.

```
docker build -t img_myapp03 .
```

If we want to make changes or add new files, it will invalidate the cache. Make a change to index.php and build again. Add `echo '<p>Another edit</p>';` to index.php. 
```
docker build -t img_myapp03 .
```

A change in code each time will invalidate the cache from the COPY step onwards. Instead move the COPY command to after the install composer step. 
```
docker build -t img_myapp03 .
```
Make another change to index.php - `echo '<p>Another edit, more edits</p>';`. Build is now much faster as the composer step used the layed from the build cache. 

In local development, it is a pain to having to rebuild the image each time a change is made to code. That's where volumes come into use. 