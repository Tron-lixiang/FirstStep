year = int(input('year:\n'))
month = int(input('month:\n'))
day = int(input('day:\n'))
months = (0,31,59,90,120,151,181,212,243,273,304,334)
if 0<year<3000:
    a = year
else:
    print('年输入错误')
if 0<month<=12:
    sum = months[month-1]
else:
    print('月份输入错误')
if day<=0 or day>31:
    print('日输入错误')
sum +=day
leap = 0
if(year %400 ==0)or((year % 4==0)and (year %100 !=0)):
    leap = 1
if(leap ==1 )and (month>2):
    sum+=1
print('It is the %dth day.'% sum)
