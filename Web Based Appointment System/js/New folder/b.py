name=input("enter a name ")
n=len(name)
for i in range(n):
    if i==n:
        print(name," "*(n),end="")
        print(name)
    else:
        print("  "*(n+i),end="")
        print(name[i]*i)

print(n)