# Service Worker Assignment
* Clone the git repository
## Installation
* Spin Up the project:
   ```
   docker-compose up -d --build
   ```
* Import the Database. The Database name magento.sql is located at the root. Import into database name magento. You can use phpmyAdmin at 
  127.0.0.1:8080
* Connect to web container CLI
 ```
  docker exec -it web bash
  ```
   Then navigate to the app directory which is the document root.
* Under the app directory, Run static content deploy and clean magento cache
 ```
  bin/magento setup:static-content:deploy -f
  ```
   ```
  bin/magento cache:clean
  ```
* Add local.domain.com to hosts file
   ```
   sudo -- sh -c "echo '127.0.0.1 local.domain.com' >> /etc/hosts"
  ```
* Login Credentials
   ```
   Admin Username : admin
   Admin Password: ilyas123
   Admin Url : https://local.domain.com/admin
   FrontendUrl : https://local.domain.com
   Cloudianry: cloudinary://926821698683784:EeENPdTZRCgIa1YV6bN6MtR5SoI@sun-and-sand-sports
  ```
