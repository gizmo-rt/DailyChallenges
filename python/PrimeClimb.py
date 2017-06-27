def primeClimb(n):
    r = ''
    i = 2
    v=0
    k=0
    if (not all(n % j for j in xrange(2, int(n**.5)+1))):
        while n != 1:
            if n % i:
                r += str(k) + str(v) if v > 1 else str(k) if k else ''
                v = 0
                k = 0
                i += 1
            else:
                n /= i
                k = i
                v += 1

    r += str(k) + str(v) if v > 1 else str(k) if k else str(n)
    return r


print primeClimb(2147117569)
