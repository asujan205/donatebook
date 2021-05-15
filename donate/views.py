from django.shortcuts import render
from .models import donater
# Create your views here.
def index(request):
    dest=donater.objects.all()
    return render(request,'index.html',{'dets':dest})

def donate(request):
	if request.method == 'POST' and request.method=='FILES':
		doner_name= request.POST["name"]
		doner_address= request.POST["address"]
		doner_number= request.POST["number"]
		book_name= request.POST["book"]
		book_author= request.POST["auname"]
		Image= (request.FILES,request.POST)["donateimg"]
		upload = donater.objects.create(
			Book_name=book_name,
			Book_author=book_author,
			Doner_name=doner_name,
			Doner_address=doner_address,
			Doner_phone=doner_number,
			Image=Image
			)
		upload.save()