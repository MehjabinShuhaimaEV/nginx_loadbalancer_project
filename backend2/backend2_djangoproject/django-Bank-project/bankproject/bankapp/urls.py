from django.urls import path,include
from . import views

urlpatterns = [

    path('',views.index,name='index'),
    path('login/',views.login,name='login'),
    path('register/', views.register, name='register'),
    path('logout',views.logout,name="logout"),
    path('create', views.create, name="create"),
    path('2/', views.all, name="all"),
    path('5/', views.tr, name="tr"),
    path('1', views.er, name="er"),
    path('3', views.th, name="th"),
    path('4', views.ko, name="ko"),

]