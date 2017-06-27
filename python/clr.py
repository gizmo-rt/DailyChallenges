import calendar as c

def calendar(m, y):
    c.setfirstweekday(6)
    z = c.monthcalendar(y,m)
    return z+[[0]*7] if len(z)==5 else z


print(calendar(5,2017))