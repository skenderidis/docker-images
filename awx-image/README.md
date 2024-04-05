create an image for running awx with my collection. Read more on url = https://github.com/ansible/awx-ee.git


Clone the docker-images repository.

Go to folder docker-images/awx-image

Run the following

ansible-builder build -v3 -t skenderidis/awx_f5_awaf:1.0.X