from django.http import HttpResponse
from django.shortcuts import render,redirect
from django.contrib import messages, auth
from django.contrib.auth.models import User

from formapp.forms import demo_form

# Create your views here.

def index(request):
     # return HttpResponse("hello world")
    return render(request,"index.html")

def register(request):

        if request.method == 'POST':
            username = request.POST['username']
            password = request.POST['password']
            cpassword = request.POST['cpassword']
            if password == cpassword:
                if User.objects.filter(username=username).exists():
                    messages.info(request, "username taken")
                    return redirect('register')
                else:
                    user = User.objects.create_user(username=username,password=password, )
                    user.save();
                    # print("user created")
                    return redirect('login')

            else:
                messages.info(request, "password not matching")
                return redirect('register2')

            # return redirect('/')
        return render(request,"register2.html")
def login(request):
    if request.method =='POST':
        username=request.POST['username']
        password=request.POST['password']
        user=auth.authenticate(username=username,password=password)

        if user is not None:
         auth.login(request,user)
         return redirect('/')
        else:
          messages.info(request,"invalid user")
        return redirect('login2')
    return render(request,"login2.html")

def logout(request):
    auth.logout(request)
    return redirect('/')

def create(request):
    if request.method =='POST':

        messages.info(request, "application accepted")

    return render(request,"create.html")

def er(request):
    return render(request,"aer.html")
def ko(request):
    return render(request,"ako.html")

def th(request):
    return render(request,"ath.html")

def all(request):
    return render(request,"aal.html")

def tr(request):
    return render(request,"atr.html")