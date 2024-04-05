This dockerfile is used to create a fluentd image that will be used on Kubernetes for NGINX log parsing.
Original GIT is https://github.com/fluent/fluentd-kubernetes-daemonset/blob/master/docker-image/v1.16/debian-elasticsearch8/Dockerfile

I am adding few plugins that I have created like:

gem "fluent-plugin-geoip"
gem "fluent-plugin-nginx-nap-decode", "~> 0.4.62"
gem "fluent-plugin-nginx-nap-split" 
