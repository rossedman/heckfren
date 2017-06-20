# Heckfren!

This is an example from a Kubernetes demo I gave. It's fun and hopefully didn't
do you a frighten.

---

## Docker Container

### Build Container

```
docker build rossedman/heckfren .
```

### Run Container

Here is an example of how this container can be run locally and what variables are
exposed.

```
docker run -p 8080:80 \
  -v $(pwd)/src:/var/www/html \
  -e HECK_BG_COLOR=green \
  -e HECK_IMAGE=doge2 \
  rossedman/heckfren
```

---

## Kubernetes Deployment
