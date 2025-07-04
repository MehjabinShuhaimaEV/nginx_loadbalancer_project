#!/bin/bash
cd /prjct/
source v1/bin/activate
gunicorn --bind 0.0.0.0:8080 bankproject.wsgi:application
