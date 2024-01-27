This dockerfile is used to create a fluentd image that will be used on Kubernetes for NGINX log parsing.

I am adding few plugins that I have created like:

gem "fluent-plugin-geoip"
gem "fluent-plugin-nginx-nap-decode", "~> 0.4.62"
gem "fluent-plugin-nginx-nap-split" 
