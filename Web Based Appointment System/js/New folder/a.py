
def srt(a):
    for i in range(0,len(a)):
        for j in range(i+1,len(a)):
            if a[i]>a[j]:
                temp=a[i]
                a[i]=a[j]
                a[j]=temp
    return (a)





def li(lists,result):
    srt(lists)
    s=0
    while True:
        if lists[s]==result:
            return s
        s +=1
        if result not in lists:
            return -1


a=[11,6,8,3,7]
b=int(input("numbers"))
print(li(a,b))


for i in range(1,b+1):
 print(" "*(b-i)," *"*i)