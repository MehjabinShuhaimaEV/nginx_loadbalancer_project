# Nginx Load Balancer Project

This project demonstrates a simple load balancing setup using **Nginx** to route traffic between two backend servers hosted on different VMs — one running **WordPress** and the other running a **Django** project with **Gunicorn**.

## 🧠 Project Overview

- **VM1 (Load Balancer & DNS)**
  - Nginx configured as a load balancer
  - DNS entries for resolving backend servers

- **VM2 (Backend1)**
  - Apache web server
  - WordPress site deployed at `/var/www/wordpress`
  - Django application served via Gunicorn
  - Sample Django app deployed and started using a shell script

- **VM3 (Backend2)**
  - Django application served via Gunicorn
  - Sample Django app deployed and started using a shell script
  - Apache web server
  - WordPress site deployed at `/var/www/wordpress`

## 🗂️ Repository Structure

nginx_loadbalancer_project/
│
├── backend1/ # Contains WordPress and Django project for backend1
│ ├── backend1_apache_conf/
│ ├── backend1_djangoproject/
│ ├── backend1_html/wordpress/
│ └── start-gunicorn.sh
│
├── backend2/ # Contains WordPress and Django project for backend2
│ ├── backend2_apache_conf/
│ ├── backend2_djangoproject/
│ ├── backend2_html/wordpress/
│ └── start-gunicorn.sh
│
├── dns/ # Custom DNS settings and zone files
│
└── loadbalancer/ # Nginx load balancer configuration
├── loadb_nginx_sites/
└── loadb_nginx.conf

## 🔧 Technologies Used

- **Nginx** – Load balancer
- **Apache** – WordPress hosting
- **Gunicorn** – Django app server
- **MySQL** – Backend database for WordPress and Django
- **BIND** – Local DNS server
- **Ubuntu** – Operating System for all VMs

## ⚙️ How It Works

- The **load balancer** receives incoming traffic and forwards requests to either VM2 or VM3 based on Nginx upstream configuration.
- Backend1 (VM2) serves the WordPress site using Apache and the Django application using Gunicorn.
- Backend2 (VM3) serves the WordPress site using Apache and the Django application using Gunicorn.
- DNS entries are manually configured for local resolution of each VM.

## 🚀 Starting the Services

- On VM2:
  ```bash
  sudo systemctl start apache2
  bash start-gunicorn.sh
On VM3:
```bash
  sudo systemctl start apache2
  bash start-gunicorn.sh
On VM1:
sudo systemctl restart nginx
📌 Notes
Ensure each VM can ping others and DNS resolves correctly.

Update /etc/hosts or use BIND for DNS name resolution in all VMs.

🧑‍💻 Author
Mehjabin Shuhaima EV
GitHub: MehjabinShuhaimaEV

📜 License
This project is for educational/demo purposes only.
