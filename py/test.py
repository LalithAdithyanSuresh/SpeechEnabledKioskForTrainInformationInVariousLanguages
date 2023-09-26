import requests
def GetTrain(pnrNum):
    response = requests.get('https://indian-railway-api.cyclic.app/trains/getTrain/?trainNo={}'.format(pnrNum))
    Files = response.json()
    print(Files['data'])
GetTrain(12028)