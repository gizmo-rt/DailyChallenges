# https://codefights.com/challenge/admES7uudjBkBNSB3
# https://en.wikipedia.org/wiki/Fermat%27s_factorization_method
# http://www.ams.org/journals/mcom/1974-28-126/S0025-5718-1974-0340163-2/S0025-5718-1974-0340163-2.pdf

def fermactor(n):
    a = int(n ** .5)
    b = .1
    while (int(b) != b):
        a += 1
        b = (a ** 2 - n) ** .5
    return [a, b]


n = 15
print(fermactor(n))
