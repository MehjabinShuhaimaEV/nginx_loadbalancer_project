from django.urls import path

from . import views

urlpatterns = [
    path('', views.inde, name='inde'),
    path('ajax/load-cities/', views.load_cities, name='ajax_load_cities'),  # AJAX

]