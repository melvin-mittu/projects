from django.db import models
from django.contrib.auth.models import User

# Create your models here.
class Category(models.Model):
     ca=models.CharField(max_length=255)
class user(models.Model):
    name=models.CharField(max_length=255)
    address=models.CharField(max_length=255)
    user=models.ForeignKey(User,on_delete=models.CASCADE,null=True)
    number=models.CharField(max_length=255)
class shoes(models.Model):
    add=models.ForeignKey(Category,on_delete=models.CASCADE,null=True)
    product_name=models.CharField(max_length=255)
    product_models=models.CharField(max_length=255)
    product_category=models.CharField(max_length=255)
    price=models.IntegerField(null=True)
    image=models.ImageField(blank=True,upload_to="image/")
class shoesuser(models.Model):
    user=models.ForeignKey(User,on_delete=models.CASCADE,null=True)
    address=models.CharField(max_length=255)
    number=models.CharField(max_length=255)
    image=models.ImageField(default="default1.jpg",blank=True,upload_to="image/", null=True)

    
class Cart(models.Model):
    user=models.ForeignKey(User,on_delete=models.CASCADE,null=True)
    product=models.ForeignKey(shoes,on_delete=models.CASCADE,null=True)
    quantity=models.PositiveIntegerField(default=1)

    def total_price(self):
            return self.quantity * self.product.price