### Nginx Load Balancer Project

This project demonstrates a simple load balancing setup using **Nginx** to route traffic between two backend servers hosted on different VMs — one running **WordPress** and the other running a **Django** project with **Gunicorn**.

#### 🧠 Project Overview

- **VM1 (Load Balancer & DNS)**
  - Nginx configured as a load balancer
  - DNS entries for resolving backend servers

- **VM2 (Backend1) & VM3 (Backend2)**
  - Apache web server
  - WordPress site deployed at `/var/www/wordpress`
  - Django application served via Gunicorn
  - Sample Django app deployed and started using a shell script

#### 🗂️ Repository Structure

nginx_loadbalancer_project/

│

├── backend1/ # Contains WordPress and Django project & Gunicorn for backend1

├── backend2/ # Same as backend1

├── dns/ # Custom DNS settings and zone files

└── loadbalancer/ # Nginx load balancer configuration


#### 🔧 Technologies Used

- **Nginx** – Load balancer
- **Apache** – WordPress hosting
- **Gunicorn** – Django app server
- **MySQL** – Backend database for WordPress and Django
- **BIND** – Local DNS server
- **Ubuntu** – Operating System for all VMs

#### ⚙️ How It Works

- The **load balancer** receives incoming traffic and forwards requests to either VM2 or VM3 based on Nginx upstream configuration.
- Backend1 (VM2) serves the WordPress site using Apache and the Django application using Gunicorn.
- Backend2 (VM3) serves the WordPress site using Apache and the Django application using Gunicorn.
- DNS entries are manually configured for local resolution of each VM.

#### 🚀 Starting the Services

- On VM2 & VM3:
  ```bash
  sudo systemctl start apache2
  bash start-gunicorn.sh
- On VM1:
  ```bash
  sudo systemctl restart nginx
📌 Notes
Ensure each VM can ping others and DNS resolves correctly.

Update /etc/hosts or use BIND for DNS name resolution in all VMs.

🧑‍💻 Author
Mehjabin Shuhaima EV
GitHub: MehjabinShuhaimaEV

📜 License
This project is for educational/demo purposes only.
