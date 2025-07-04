from django.shortcuts import render
from.forms import demo_form
from .models import Person,District,Branch
from django.contrib import messages, auth

# Create your views here.
def inde(request):

    form = demo_form()
    # form=demo_form(request.POST)
    if request.method =='POST':
        messages.info(request, "Application accepted")


    return render(request,'demo1.html',{'form':form})

def load_cities(request):
    district_id = request.GET.get('district_id')
    cities = Branch.objects.filter(district_id=district_id).all()
    return render(request, 'city_dropdown_list_options.html', {'cities': cities})