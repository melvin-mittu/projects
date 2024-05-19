from django.shortcuts import render,redirect
from django.contrib.auth.models import User,auth
from django.contrib import messages
from django.contrib.auth.decorators import login_required
from django.contrib.auth import authenticate,login,logout
from shoes.models import shoes,shoesuser,Category,Cart
import os
# Create your views here.
def newhome(request):
    return render(request,'newhome.html')
def about(request):
    return render(request,'about.html')
def home(request):
    sh=shoesuser.objects.all()
    prod=Category.objects.all()
    pr=shoes.objects.all()
    return render(request,'home.html',{'shoesuser':sh,'prodct':prod,'pr':pr})
def newar(request):
    sh=shoesuser.objects.all()
    prod=Category.objects.all()
    pr=shoes.objects.all()
    return render(request,'newarr.html',{'shoesuser':sh,'prodct':prod,'pr':pr})
def signup(request):
    return render(request,'signup.html')
def contact(request):
    return render(request,'contact.html')
def backin(request):
    return render(request,'home.html')



def alogin(request):
    return render(request,'adminlogin.html')



def signin(request):
    return render(request,'signin.html')
def sign(request):
    if request.method=="POST":
        first_name=request.POST['fname'] 
        last_name=request.POST['lname']
        ad=request.POST['adrs']
        email=request.POST['mail']
        num=request.POST['phone']
        username=request.POST['uname']
        password=request.POST['pass']
        rpassword=request.POST['pass1']
        img=request.FILES.get('pic')
        if request.FILES.get('pic') is not None:
            img=request.FILES.get('pic')
        if password==rpassword:
            if User.objects.filter(username=username).exists():
                messages.info(request,"This username already exist!!!!")
                return redirect('sign')
            else:
                user=User.objects.create_user(
                    first_name=first_name,
                    last_name=last_name,
                    email=email,
                    username=username,
                    password=password )
                user.save()
                u=User.objects.get(id=user.id)
                coustmer=shoesuser(address=ad,number=num,image=img,user=u)
                coustmer.save()
                return redirect('/')
        else:
            messages.info(request,"password doesnot match...!")
            print("Password is not matching")
            return redirect('signin')
       
    else:
        return render(request,'signup.html')
    
def log(request):
    if request.method=='POST':
        usernme=request.POST['user']
        password=request.POST['pass']
        print(password)
        user=auth.authenticate(username=usernme,password=password)
        if user is not None:
            if user.is_staff:
                login(request,user)
                messages.info(request,f'welcome admin')
                return redirect('alogin')
            else:
                login(request,user)
                auth.login(request,user)
                messages.info(request,f'welcome {usernme}')
                return redirect('home')
        else:
            messages.info(request,'invalid username or password.Try again!!')
            return redirect('signup')
    else:
        return render(request,'home.html')
    
def useredit(request):
    current_user=request.user.id
    print(current_user)
    user1=shoesuser.objects.get(user_id=current_user)
    user2=User.objects.get(id=current_user)
    if request.method=='POST':
        if len(request.FILES)!=0:
            if len(user1.image)>0:
                os.remove(user1.image.path)
            user1.image=request.FILES.get('pic')
        user2.first_name=request.POST['fname']
        user2.last_name=request.POST['lname']
        user2.username=request.POST['uname']
        user2.email=request.POST['mail']
        user1.address=request.POST['adrs']
        user1.number=request.POST['phone']
        user1.save()
        user2.save()
        return redirect('home')
    return render(request,'editpro.html',{'users':user1})





def super(request):
    return render(request,'adminlogin.html')

def logout(request):
    auth.logout(request)
    return redirect('sign')




def add(request):
    if request.method == 'POST':
        mname=request.POST['mname']
        mode=request.POST['mode'] 
        pric=request.POST['price']      
        image=request.FILES.get('image')
        sel=request.POST['sel']
        cat=Category.objects.get(id=sel)
        cat.save()
        pro = shoes(product_name=mname,product_models=mode,price=pric,image=image,add=cat)
        print("Save data...")
        pro.save()
        return redirect('showarrivals')
    return render(request,'addarrivals.html')
@login_required(login_url='sign')
def showarrivals(request):
    pr=shoes.objects.all()
    return render(request,'showarrivals.html',{'pr':pr})
def deladmin(request,id):
    cust=shoesuser.objects.get(user=id)
    us=User.objects.get(id=id)
    cust.delete()
    us.delete()
    return redirect('user')
@login_required(login_url='sign')
def editpage(request,pk):
    prod = shoes.objects.get(id=pk)
    return render(request,'prodedit.html',{'prod':prod})
@login_required(login_url='sign')
def edit_shoes(request,pk):    
    if request.method=='POST':
        prod = shoes.objects.get(id=pk)
        prod.product_name = request.POST.get('mname')
        prod.price = request.POST.get('price')
        prod.product_category = request.POST.get('cate')
        prod.product_models = request.POST.get('mode')
        if len(request.FILES)!=0:
            if len(prod.image)>0:
                os.remove(prod.image.path)
            prod.image = request.FILES.get('image')
        prod.save()
        return redirect('showarrivals')
    return render(request, 'prodedit.html',)
@login_required(login_url='sign')
def delete(request,pk):
    prodt = shoes.objects.filter(id=pk)
    prodt.delete()
    return redirect('showarrivals')

def user(request):
    sh=shoesuser.objects.all()
    return render(request,'adminusershow.html',{'shoesuser':sh})

def carts(request):
    cart_items = Cart.objects.filter(user=request.user).select_related('product')
    total_price = sum(item.total_price() for item in cart_items)
    return render(request, 'cart.html', {'cartitems':cart_items,'totalprice': total_price})

@login_required(login_url='sign')
def cart_details(request, pk):
    product = shoes.objects.get(id=pk)
    cart_item, created = Cart.objects.get_or_create(user=request.user, product=product)
    if not created:
        cart_item.quantity += 1
        cart_item.save()
    return redirect('carts')

@login_required(login_url='sign')
def removecart(request, pk):
    product = shoes.objects.get(id=pk)
    cart_item = Cart.objects.filter(user=request.user, product=product).first()
    if cart_item:
        cart_item.delete()
    return redirect('carts')

@login_required(login_url='sign')
def removecart1(request, pk):
    product = shoes.objects.get(id=pk)
    cart_item = Cart.objects.filter(user=request.user, product=product).first()
    if cart_item:
        cart_item.delete()
    return redirect('place')
@login_required(login_url='sign')
def place(request):
    return render(request,'placeorder.html')
@login_required(login_url='sign')

def addcat(request):
    if request.method=='POST':
        cat=request.POST['cate']
        catg=Category(ca=cat)
        catg.save()
        return redirect('addarrivals')

def addcategory(request):
    return render(request,'addcategory.html')
def addproduct(request):
    pr=Category.objects.all()
    return render(request,'addarrivals.html',{'pro':pr})


def categorized_products(request, id):
    categories=Category.objects.filter(id=id)
    if categories.exists():
        category=categories.first()
        products=shoes.objects.filter(add=category)
        return render(request, 'category.html',{'categories':[category],'products':products})
    else:
        return render(request,'home.html')

def category(request):
    ca=Category.objects.all()
    return render(request,'category.html',{'category',ca})