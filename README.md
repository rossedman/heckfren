# Heckfren!

This is an example from a Kubernetes demo I gave. It's fun and hopefully didn't
do you a frighten.

---

## Docker Container

Heck fren, let's build a simple service. A frontend and an API so we can practice
some deployments.

### Build Container

```
$ docker build rossedman/heckfren:v1.0 ./frontend
$ docker build rossedman/heckfren-api:v1.0 ./api
```

### Run Container

Here is an example of how this container can be run locally and what variables are
exposed.

```
$ docker-compose up
```

---

## Kubernetes Deployment

Now that we got that done, let's deploy some things.

```
$ kubectl create -f ./kubernetes/heckfren.svc.yml
$ kubectl create -f ./kubernetes/heckfren-api.svc.yml
$ kubectl create -f ./kubernetes/heckfren.deploy.yml
$ kubectl create -f ./kubernetes/heckfren-api.deploy.yml
```

Now let's see what our service endpoints are, it should look like this.

```
$ kubectl get svc

NAME                  CLUSTER-IP      EXTERNAL-IP       PORT(S)        AGE
heckfren-api          10.23.248.229   <none>            80/TCP         12m
heckfren-api-public   10.23.249.107   104.197.174.156   80:30798/TCP   11m
heckfren-web          10.23.245.211   104.197.51.28     80:32095/TCP   12m
kubernetes            10.23.240.1     <none>            443/TCP        2h
```

As you can see, we have two service with external IP addresses that are facing the
internet and one that is only available to the cluster.
