import os
from django.shortcuts import redirect, render
from .models import emply

def index(request):
    return render(request,'employee.html')
def add_details(request):
     if request.method == 'POST':
        nam=request.POST['name']
        ag=request.POST['age']
        phon=request.POST['phone']  
        experi=request.POST['experience']      
        imag=request.FILES.get('file')
        emp=emply(name=nam,age=ag,phone=phon,experience=experi,image=imag)
        print("Save data...")
        emp.save()
        return redirect('show_detail')
def show_detail(request):
    eps=emply.objects.all()
    return render(request,'showdetail.html',{'eps':eps})

def edit(request,pk):
    eps=emply.objects.get(id=pk)
    return render(request,'edit.html',{'eps':eps})
def edit_details(request,pk):
    if request.method == 'POST':
        epls=emply.objects.get(id=pk)
        epls.Name = request.POST.get('name')
        epls.Age = request.POST.get('age')
        epls.Phone = request.POST.get('phone')
        epls.Experience = request.POST.get('experience')
        if len(request.FILES)!=0:
            if len(epls.image)>0:
                os.remove(epls.image.path)
            epls.image = request.FILES.get('file')
        epls.save()
        return redirect('show_detail')
    return render(request,'edit.html')
def delete(request,pk):
    e=emply.objects.filter(id=pk)
    e.delete()
    return redirect('show_detail')

def styl(request):
    return render(request,'showdetail.html')