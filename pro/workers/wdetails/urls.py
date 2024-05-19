from django.urls import path
from . import views

urlpatterns = [
    path('',views.index,name='index'),
    path('add_details',views.add_details,name='add_details'),
    path('show_detail',views.show_detail,name='show_detail'),
    path('edit/<int:pk>',views.edit,name='edit'),
    path('edit_details/<int:pk>',views.edit_details,name='edit_details'),
    path('delete/<int:pk>',views.delete,name='delete'),
  
]