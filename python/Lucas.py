# https://codefights.com/challenge/FGWntJmJm2ErFuv9u

def lucas(p, q, n):
    return [u(p, q, n), v(p, q, n)]


def u(p, q, n):
    a=0
    b=1
    s=0
    n-=1
    while n:
        s= p*b-q*a
        a = b
        b=s
        n-=1
    return s


def v(p, q, n):
    if n == 1:
        return p
    elif n == 0:
        return 2
    else:
        return p * v(p, q, n - 1) - q * v(p, q, n - 2)


print lucas(12,5,9)