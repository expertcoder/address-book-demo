### Build Docker Images

```
cd devops/docker/elasticsearch
docker build -t expertcoder2017/elasticsearch .
docker push expertcoder2017/elasticsearch

cd devops/docker/lamp
docker build -t expertcoder2017/lamp .
docker push expertcoder2017/lamp
```

### Run ansible Playbooks

```
cd devops/ansible
ansible-playbook -i ./hosts ./all.yml --limit=beta
```

### Some manual tasks not yet in deploy scripts

```
cd /var/www
composer install

artisan migrate
artisan db:seed
artisan demo-sync-es
```

